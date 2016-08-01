<?php
/**
 * @ desc: 通用控制器
 * @ project: Takahashi
 * @ Author: Qi
 * @ Date: 2016-07-31 01:12:09
 *                        . .
 *                      '.-:-.`  
 *                      '  :  `
 *                   .-----:     
 *                 .'       `.
 *           ,    /       (o) \   
 *           \`._/          ,__)
 *       ~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 *       
 *       Code is far away from bug with the dolphin protecting
 *                       海豚保佑,代码无bug
 */
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller
{
    public function __construct()
    {
        header("content-type:text/html;charset=utf-8");
        parent::__construct();
    }
    /**
     * 获取文章排行
     * @return array
     */
    public function getRank()
    {
        $conds['status'] = 1;
        $news = D('News')->getRank($conds, 8);
        return $news;
    }
}