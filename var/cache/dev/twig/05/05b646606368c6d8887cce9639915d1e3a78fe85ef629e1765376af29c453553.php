<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_24f5d20433a74f98e05384e618536244c101a7f315c99f01defbf8fb7ede764e extends Twig_Template
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
        $__internal_5e3f5260f6471cd2f7452012d4b95541fefed9fd2f8e6705510f22cb9d1f6e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3f5260f6471cd2f7452012d4b95541fefed9fd2f8e6705510f22cb9d1f6e45->enter($__internal_5e3f5260f6471cd2f7452012d4b95541fefed9fd2f8e6705510f22cb9d1f6e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5e3f5260f6471cd2f7452012d4b95541fefed9fd2f8e6705510f22cb9d1f6e45->leave($__internal_5e3f5260f6471cd2f7452012d4b95541fefed9fd2f8e6705510f22cb9d1f6e45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
