<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ca534c89f692a99aae55c17a1996db0289b8da5adfa957698c51a21e4b139d12 extends Twig_Template
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
        $__internal_9b702dbbe55ccacdd2d2a2d7b81dd21eebf719f5172fcb2ff923d26563ef68fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b702dbbe55ccacdd2d2a2d7b81dd21eebf719f5172fcb2ff923d26563ef68fd->enter($__internal_9b702dbbe55ccacdd2d2a2d7b81dd21eebf719f5172fcb2ff923d26563ef68fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9b702dbbe55ccacdd2d2a2d7b81dd21eebf719f5172fcb2ff923d26563ef68fd->leave($__internal_9b702dbbe55ccacdd2d2a2d7b81dd21eebf719f5172fcb2ff923d26563ef68fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
