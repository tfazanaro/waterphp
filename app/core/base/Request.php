<?php namespace core\base;

final class Request
{
    public static function all()
    {
        if (count($_POST) > 0)
        {
            $post_fields = array_keys($_POST);
            $post_values = array_values($_POST);

            $input = [];
            foreach($post_fields as $i => $name) {
                $input[$name] = $post_values[$i];
            }
            return (count($input) > 0) ? $input : null;
        }
        return null;
    }

    public static function get($key)
    {
        $input = self::all();
        if ($input) {
            if (array_key_exists($key, $input)) {
                return $input[$key];
            }
        }
        return null;
    }

    public static function old($key)
    {
        return self::get($key);
    }
}