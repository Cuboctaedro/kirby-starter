<?php


class ArticlePage extends Page
{

    public function longDate() {

        $rawdate = $this->date()->toDate('U');

        if($this->kirby()->language()->code() == 'el' ) {

            return t(date('l', $rawdate)) . ', ' . date('j', $rawdate) . ' ' . t(date('F', $rawdate)) . ', ' . date('Y', $rawdate);

        } else {

            return date('l', $rawdate) . ', ' . date('F', $rawdate) . ' ' . date('jS', $rawdate) . ', ' . date('Y', $rawdate);

        }

    }


}
