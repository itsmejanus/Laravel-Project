<?php

class people extends Eloquent {
	public static $table = 'users_metadata';
		public static $timestamps = false;
		public static $key = 'user_id';
}