<?php

/**
 * Created by PhpStorm.
 * User: l00617
 * Date: 2016/5/12
 * Time: 16:12
 *
 * @类名:page.php
 * @参数:total_rows - 总记录数
 *       page_rows - 每页所需记录数
 *       current_page - 当前页
 *       current_url - 当前链接
 */
class Page
{
    /*
     * 需要输入的参数
     */
    private $total_rows;    //总记录数
    private $page_rows;     //每页所需记录数
    private $current_page;  //当前页
    private $current_url;   //当前链接
    private $show_pages;     //需要显示页数


    /*
     * 处理后的参数
     */
    private $page_head;     //起头页
    private $page_foot;     //结尾页
    private $page_counts;   //总页数

    /**
     * __construct                 构造函数
     * @param int total_rows     总记录数
     * @param int page_rows      每页所需记录数
     * @param int current_page   当前页
     * @param string current_url 当前链接
     * @param int show_pages      需要显示页数
     */
    public function __construct($total_rows=1, $page_rows=1, $current_page=1, $current_url, $show_pages=5 )
    {
        $this->total_rows = $this->numeric($total_rows);
        $this->page_rows = $this->numeric($page_rows);
        $this->current_page = $this->numeric($current_page);
        $this->show_pages = $this->numeric($show_pages);
        $this->page_counts = ceil($this->total_rows / $this->page_rows);
        $this->current_url = $current_url;
        $tag = floor($this->show_pages / 2);
        if($this->page_counts < $this->show_pages)
        {
            $this->page_head = 1;
            $this->page_foot = $this->page_counts;
        }
        else
        {
            $this->page_head = $this->current_page - $tag;
            $this->page_foot = $this->current_page + $tag;
            if($this->page_head < 1)
            {
                $this->page_foot += (1 - $this->page_head);
                $this->page_head = 1;
            }
            if($this->page_foot > $this->page_counts)
            {
                $this->page_head -= ($this->page_foot - $this->page_counts);
                $this->page_foot = $this->page_counts;
            }
        }

    }

    //检测是否为数字
    private function numeric($num)
    {
        if (strlen($num)) {
            if (!preg_match("/^[0-9]+$/", $num)) {
                $num = 1;
            } else {
                $num = substr($num, 0, 11);
            }
        } else {
            $num = 1;
        }
        return $num;
    }

    //地址替换
    private function url_replace($page) {
        return str_replace("{page}", $page, $this->current_url);
    }

    //首页
    private function page_home()
    {
        if($this->page_head != 1)
        {
            return "<li><a href='" . $this->url_replace(1) . "'>&laquo;</a></li>";
        }
    }

    //上一页
    private function page_previous()
    {
        if($this->current_page != 1)
        {
            return "<li><a href='" . $this->url_replace($this->current_page - 1) . "'>上一页</a></li>";
        }
    }

    //下一页
    private function page_next()
    {
        if($this->current_page != $this->page_counts)
        {
            return "<li><a href='" . $this->url_replace($this->current_page + 1) . "'>下一页</a></li> ";
        }
    }

    //尾页
    private function page_foot()
    {
        if($this->page_foot != $this->page_counts)
        {
            return "<li><a href='" . $this->url_replace($this->page_counts) . "'>&raquo;</a></li>";
        }
    }

    //输出
    public function output()
    {
        $str="<ul class='pagination'>";
        $str.=$this->page_home();
        for($i = $this->page_head; $i <= $this->page_foot; $i++)
        {
            if($i == $this->current_page)
            {
                $str.="<li class='active'><a href='" . $this->url_replace($i) . "' title='第" . $i . "页'>$i<span class='sr-only'>(current)</span></a></li>";
            }
            else
            {
                $str.="<li><a href='" . $this->url_replace($i) . "' title='第" . $i . "页'>$i</a></li>";
            }
        }
        $str.=$this->page_foot();
        $str.="</ul><ul class='pager'>";
        $str.=$this->page_previous();
        $str.=$this->page_next();
        $str.="</ul>";
        return $str;


    }

}