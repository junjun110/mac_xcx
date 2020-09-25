<?php
/**
 * @author
 * email: weigo521@163.com
 * wechat:weigo521 * Date: 2020/9/25
 * Time: 15:18
 */
namespace app\admin\controller;
use think\Db;
use think\addons\AddonException;
use think\addons\Service;
use think\Cache;
use think\Config;
use think\Exception;
use app\common\util\Dir;

class Xcxsys extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$param = input();

		return $this->fetch('admin@xcxsys/index');
	}
}