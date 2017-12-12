<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2fbaa0734227dc652ba9e2e214416944735a49e195b778592970b3e5bc9dc454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8e3ea4704760b37de293646f72dbaff131319a915d6eaa2ace9bce02a2a46ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e3ea4704760b37de293646f72dbaff131319a915d6eaa2ace9bce02a2a46ce->enter($__internal_b8e3ea4704760b37de293646f72dbaff131319a915d6eaa2ace9bce02a2a46ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b8e3ea4704760b37de293646f72dbaff131319a915d6eaa2ace9bce02a2a46ce->leave($__internal_b8e3ea4704760b37de293646f72dbaff131319a915d6eaa2ace9bce02a2a46ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
