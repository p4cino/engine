<?php

class KillSwitch
{
    public function __construct($role = null, $template, $page = null)
    {
        $this->template = $template;
        $this->role = $role;
        $this->page = $page;
        $this->access = null;
        $this->folder = null;
        $this->start = null;
    }

    /**
     * @return null
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * @param null $access
     */
    public function setAccess($access)
    {
        $this->access = $access;
    }

    /**
     * @return null
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * @param null $folder
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;
    }

    /**
     * @return string
     */
    public function getRender()
    {
        return $this->render;
    }

    /**
     * @param string $render
     */
    public function setRender($render)
    {
        $this->render = $render;
    }

    /**
     * @return null
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param null $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param mixed $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * @return null
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param null $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function killSwitch()
    {
        switch ($this->getRole()) {
            case 0:
                $this->setAccess($this->template['guest']);
                $this->setFolder('guest');
                $this->setStart($this->template['guest'][0]);
                break;
            case 1:
                //Zwykły user
                $this->setAccess($this->template['user']);
                $this->setFolder('user');
                $this->setStart($this->template['user'][0]);
                break;
            case 2:
                //Pracownik
                $this->setAccess($this->template['employee']);
                $this->setFolder('employee');
                $this->setStart($this->template['employee'][0]);
                break;
            case 3:
                //Wlasciciel Kina
                $this->setAccess($this->template['owner']);
                $this->setFolder('owner');
                $this->setStart($this->template['owner'][0]);
                break;
            case 4:
                //Administrator
                $this->setAccess($this->template['admin']);
                $this->setFolder('admin');
                $this->setStart($this->template['admin'][0]);
                break;
        }
    }

    public function renderPage()
    {
        $this->killSwitch();

        if(is_null($this->getPage())) {
            $this->setPage($this->getStart());
        }
        if(!in_array($this->getPage(), $this->getAccess())){
            $this->setPage('error');
        }
        require_once('./views/' . $this->getFolder() . '/header.php');
        require_once('./views/' . $this->getFolder() . '/' . $this->getPage() . '.php');
        require_once('./views/' . $this->getFolder() . '/footer.php');
    }

    public function assign($variable, $value)
    {
        $this->data[$variable] = $value;
    }


}