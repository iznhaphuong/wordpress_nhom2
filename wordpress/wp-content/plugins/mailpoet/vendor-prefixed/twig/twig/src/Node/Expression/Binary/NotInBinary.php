<?php
namespace MailPoetVendor\Twig\Node\Expression\Binary;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Compiler;
class NotInBinary extends AbstractBinary
{
 public function compile(Compiler $compiler)
 {
 $compiler->raw('!\\MailPoetVendor\\twig_in_filter(')->subcompile($this->getNode('left'))->raw(', ')->subcompile($this->getNode('right'))->raw(')');
 }
 public function operator(Compiler $compiler)
 {
 return $compiler->raw('not in');
 }
}
\class_alias('MailPoetVendor\\Twig\\Node\\Expression\\Binary\\NotInBinary', 'MailPoetVendor\\Twig_Node_Expression_Binary_NotIn');
