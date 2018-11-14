<?php

class MY_Loader extends CI_Loader {

    public function member($template_name, $vars = array(), $return = FALSE) {
        if ($return):
            $content = $this->view('member/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('member/footer', $vars, $return);

            return $content;
        else:
            $this->view('member/header', $vars);
            $this->view($template_name, $vars);
            $this->view('member/footer', $vars);
        endif;
    }
    public function admin($template_name, $vars = array(), $return = FALSE) {
        if ($return):
            $content = $this->view('admin/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            return $content;
        else:
            $this->view('admin/header', $vars);
            $this->view($template_name, $vars);
        endif;
    }

}

?>