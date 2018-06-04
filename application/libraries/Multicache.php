<?php

	class Multicache {

		function __construct()
		{
			$this->config['memcache_servers'][] = array(
												'host' => '127.0.0.1',
												'port' => 11211
											);
			$this->expire = 14400;
			$this->connected_servers = array();
			$this->_connect();
            $this->CI =& get_instance();
		}
		function _connect()
		{
		    if ( function_exists('memcache_connect') )
			{
				$this->memcache = new Memcache;
				$this->_connect_memcache();
			}
		}
		
		function _connect_memcache()
		{
		
			if ( !empty($this->config['memcache_servers']) )
			{
				// must turn off error reporting.
				// so memcache can die silently if
				// it can't connect to a server.

				$error_display = ini_get('display_errors');
				$error_reporting = ini_get('error_reporting');

				ini_set('display_errors', "Off");
				ini_set('error_reporting', 0);

				foreach ( $this->config['memcache_servers'] as $server )
				{
					if ( $this->memcache->addServer($server['host'], $server['port']) )
					{
						$this->connected_servers[] = $server;
					}
				}
				
				// back on again!

				ini_set('display_errors', $error_display);
				ini_set('error_reporting', $error_reporting);
			}
		}
		
		function get($key)
		{
         	if ( empty($this->connected_servers) )
			{
				return false;
			}
	        if($this->CI->session->userdata('bulk_user')=='Yes')
                $key.='bulkbuy';
			return $this->memcache->get($key);
		}
		
		function set($key, $data, $expire=14400)
		{
            if($this->CI->session->userdata('bulk_user')=='Yes')
                $key.='bulkbuy';
			if ( empty($this->connected_servers) )
			{
				return false;
			}

			return $this->memcache->set($key, $data, 0, $expire);
		}
		
		function replace($key, $data, $expire=14400)
		{
			if ( empty($this->connected_servers) )
			{
				return false;
			}

			return $this->memcache->replace($key, $data, 0, $expire);
		}
		
		function delete($key, $when = 0)
		{
			if ( empty($this->connected_servers) )
			{
				return false;
			}
		}
	}
?>
