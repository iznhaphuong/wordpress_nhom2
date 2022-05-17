<?php
namespace MailPoetVendor\Symfony\Component\Validator\Constraints;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Symfony\Component\Intl\Countries;
use MailPoetVendor\Symfony\Component\Validator\Constraint;
use MailPoetVendor\Symfony\Component\Validator\Exception\LogicException;
class Country extends Constraint
{
 public const NO_SUCH_COUNTRY_ERROR = '8f900c12-61bd-455d-9398-996cd040f7f0';
 protected static $errorNames = [self::NO_SUCH_COUNTRY_ERROR => 'NO_SUCH_COUNTRY_ERROR'];
 public $message = 'This value is not a valid country.';
 public function __construct($options = null)
 {
 if (!\class_exists(Countries::class)) {
 // throw new LogicException('The Intl component is required to use the Country constraint. Try running "composer require symfony/intl".');
 @\trigger_error(\sprintf('Using the "%s" constraint without the "symfony/intl" component installed is deprecated since Symfony 4.2.', __CLASS__), \E_USER_DEPRECATED);
 }
 parent::__construct($options);
 }
}
