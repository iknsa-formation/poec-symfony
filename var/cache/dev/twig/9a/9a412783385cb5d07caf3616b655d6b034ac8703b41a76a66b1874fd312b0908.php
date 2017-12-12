<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_805b6fc6c3f60393e8f47c75bb899f9ec33ba01ba22fa486490af546f85b46c4 extends Twig_Template
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
        $__internal_fd17d8dc192156ba969fa2156ba64456103d3ba0ed1d68e70eb70e7dff9a120d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd17d8dc192156ba969fa2156ba64456103d3ba0ed1d68e70eb70e7dff9a120d->enter($__internal_fd17d8dc192156ba969fa2156ba64456103d3ba0ed1d68e70eb70e7dff9a120d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_fd17d8dc192156ba969fa2156ba64456103d3ba0ed1d68e70eb70e7dff9a120d->leave($__internal_fd17d8dc192156ba969fa2156ba64456103d3ba0ed1d68e70eb70e7dff9a120d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
