<?php

class ComDebatesControllerOpinion extends ComArticlesControllerArticle
{
    public function getRequest()
    {
        $this->_request->type            = 'opinion';
        $this->_request->cck_fieldset_id = 104;

        return $this->_request;
    }
}
