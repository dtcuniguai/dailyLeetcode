<?php
/////////////////////////////////////////////////////////////////////////////////////////////////
//   Runtime: 28 ms, faster than 29.07% of PHP online submissions for Add Two Numbers.         //
//   Memory Usage: 15.9 MB, less than 12.11% of PHP online submissions for Add Two Numbers.    //
/////////////////////////////////////////////////////////////////////////////////////////////////

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}


class solution{
    
    private $carry = 0;

    function addTwoNumbers($l1, $l2) {

        $ans = new ListNode($this->carry + $l1->val + $l2->val);

        if($ans->val >= 10) {
            $this->carry = 1;
            $ans->val -= 10;
        }else{
            $this->carry = 0;
        }

        $ans->next = (!$this->carry && is_null($l1->next) && is_null($l2->next)) ? null : $this->addTwoNumbers($l1->next, $l2->next);
        return $ans;
    } 
}

$l1 = new ListNode(2, new ListNode(4, new ListNode(3)));
$l2 = new ListNode(5, new ListNode(6, new ListNode(4)));

$s = new solution();
$answer = $s->addTwoNumbers($l1, $l2);
var_dump($answer);
