<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c97258709d7a74c6d687f84de4669a8808e291d5e6259b7dc1fa60c3746b023a extends Twig_Template
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
        $__internal_7bb4c5e5a49003c37000b4995d935573d251dbe2ae34707c7ed9d336724fa925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb4c5e5a49003c37000b4995d935573d251dbe2ae34707c7ed9d336724fa925->enter($__internal_7bb4c5e5a49003c37000b4995d935573d251dbe2ae34707c7ed9d336724fa925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7bb4c5e5a49003c37000b4995d935573d251dbe2ae34707c7ed9d336724fa925->leave($__internal_7bb4c5e5a49003c37000b4995d935573d251dbe2ae34707c7ed9d336724fa925_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
