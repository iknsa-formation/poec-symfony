<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c0767c63cc5feb9e53a2287540849e8a12260ade8c67d2bc1dabadd086fabc53 extends Twig_Template
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
        $__internal_08f1edcf48b01c5c2c28365904e110c11dea99a5f9e39a9cd12903de251035f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f1edcf48b01c5c2c28365904e110c11dea99a5f9e39a9cd12903de251035f4->enter($__internal_08f1edcf48b01c5c2c28365904e110c11dea99a5f9e39a9cd12903de251035f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_08f1edcf48b01c5c2c28365904e110c11dea99a5f9e39a9cd12903de251035f4->leave($__internal_08f1edcf48b01c5c2c28365904e110c11dea99a5f9e39a9cd12903de251035f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
