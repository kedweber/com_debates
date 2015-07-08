<?php

class ComDebatesControllerDebate extends ComTermsControllerTerm
{
    public function getRequest()
    {
        $this->_request->type            = 'debate';
        $this->_request->cck_fieldset_id = 1103;

        return $this->_request;
    }
}
