<?php
/**
 *  测试
 * @author walkor <worker-man@qq.com>
 */
namespace Service;

class Blog {
	public static function getByBlogId($blog_id) {
		return array(
			'blog_id' => $blog_id,
			'title'   => 'Hello Autoload',
			'content' => 'This is content ...',
		);
	}

	public static function getTitleListByUid($uid) {
		return array(
			'blog title 1',
			'blog title 2',
			'blog title 3',
			'blog title 4',
			'blog title 5',
		);
	}
}
