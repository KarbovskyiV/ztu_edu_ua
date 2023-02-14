<?php

declare(strict_types=1);

class FormHelper extends TagHelper
{

    public function openForm(array $attrs = [])
    {
        return $this->open('form', $attrs);
    }

    public function closeForm()
    {
        return $this->close('form');
    }

    public function input(array $attrs = [])
    {
        if (isset($attrs['name'])) {
            $name = $attrs['name'];

            if (isset($_REQUEST[$name])) {
                $attrs['value'] = $_REQUEST[$name];
            }
        }

        return $this->open('input', $attrs);
    }

    public function password(array $attrs = [])
    {
        $attrs['type'] = 'password';
        return $this->input($attrs);
    }

    public function hidden(array $attrs = [])
    {
        $attrs['type'] = 'hidden';
        return $this->open('input', $attrs);
    }

    public function submit(array $attrs = [])
    {
        $attrs['type'] = 'submit';
        return $this->open('input', $attrs);
    }

    public function checkbox(array $attrs = [])
    {
        $attrs['type'] = 'checkbox';
        $attrs['value'] = 1;

        if (isset($attrs['name'])) {
            $name = $attrs['name'];

            if (isset($_REQUEST[$name]) && $_REQUEST[$name] === 1) {
                $attrs['checked'] = true;
            }

            $hidden = $this->hidden(['name' => $name, 'value' => '0']);
        } else {
            $hidden = '';
        }

        return $hidden . $this->open('input', $attrs);
    }
}
