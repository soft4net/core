<?php
/**
 * Copyright (c) 2012 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

class Test_Filestorage_FTP extends Test_FileStorage {
	/**
	 * @var string tmpDir
	 */
	private $config;
	private $id;

	public function setUp(){
		$id=uniqid();
		$this->config=include('apps/files_remote/tests/config.php');
		$this->config['ftp']['root'].='/'.$id;//make sure we have an new empty folder to work in
		$this->instance=new OC_Filestorage_FTP($this->config['ftp']);
	}

	public function tearDown(){
		OC_Helper::rmdirr($this->instance->constructUrl(''));
	}
}

?>