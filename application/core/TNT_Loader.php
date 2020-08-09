<?php

class TNT_Loader extends CI_Loader
{
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if ($return):
            $content = $this->view('partials/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('partials/footer', $vars, $return);

            return $content;
        else:
            $this->view('partials/header', $vars);
            $this->view($template_name, $vars);
            $this->view('partials/footer', $vars);
        endif;
    }

    public function templateAdmin($template_name, $vars = array(), $return = FALSE)
    {
        if ($return):
            $content = $this->view('admin/partials/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('admin/partials/footer', $vars, $return);

            return $content;
        else:
            $this->view('admin/partials/header', $vars);
            $this->view($template_name, $vars);
            $this->view('admin/partials/footer', $vars);
        endif;
    }

    public function templateProfile($template_name, $vars = array(), $return = FALSE)
    {
        if ($return):
            $content = $this->view('layout/partials/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('layout/partials/footer', $vars, $return);

            return $content;
        else:
            $this->view('layout/partials/header', $vars);
            $this->view($template_name, $vars);
            $this->view('layout/partials/footer', $vars);
        endif;
    }
}

?>
