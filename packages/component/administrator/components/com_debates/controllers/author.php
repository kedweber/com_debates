<?php

class ComDebatesControllerAuthor extends ComPeopleControllerPerson
{
    public function getRequest()
    {
        $this->_request->type            = 'author';
        $this->_request->cck_fieldset_id = 3001;

        return $this->_request;
    }
}
