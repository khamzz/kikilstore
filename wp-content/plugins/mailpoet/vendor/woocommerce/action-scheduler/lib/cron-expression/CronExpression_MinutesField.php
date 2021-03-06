<?php
if (!defined('ABSPATH')) exit;
class CronExpression_MinutesField extends CronExpression_AbstractField
{
 public function isSatisfiedBy(DateTime $date, $value)
 {
 return $this->isSatisfied($date->format('i'), $value);
 }
 public function increment(DateTime $date, $invert = false)
 {
 if ($invert) {
 $date->modify('-1 minute');
 } else {
 $date->modify('+1 minute');
 }
 return $this;
 }
 public function validate($value)
 {
 return (bool) preg_match('/[\*,\/\-0-9]+/', $value);
 }
}
