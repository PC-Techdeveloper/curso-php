<?php
/* Las interfaces de objetos permiten crear código que especifica qué métodos y propiedades una clase debe implementar, sin tener que definir cómo se implementan estos métodos o propiedades. Las interfaces comparten un espacio de nombres con las clases, traits y enumeraciones, de modo que no pueden utilizar el mismo nombre. Las interfaces pueden definir métodos mágicos para obligar a las clases que las implementan a implementar estos métodos.*/

/* Métodos mágicos: __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __serialize(), __unserialize(), __toString(), __invoke(), __set_state() __clone(), y __debugInfo(). */

#ejemplo de interface
interface Template
{
  public function set_variable($name, $var);
  public function get_html($template);
}

#implementación de la interfaz
class WorkingTemplate implements Template
{
  private $vars = [];
  public function set_variable($name, $var)
  {
    $this->vars[$name] = $var;
  }

  public function get_html($template)
  {
    foreach ($this->vars as $name => $value) {
      $template = str_replace('{' . $name . '}', $value, $template);
    }

    return $template;
  }
}

$template = new WorkingTemplate();
$template->set_variable('name', 'John');
$template->set_variable('age', 30);
echo $template->get_html("Hello {name}, you are {age} years old.");
