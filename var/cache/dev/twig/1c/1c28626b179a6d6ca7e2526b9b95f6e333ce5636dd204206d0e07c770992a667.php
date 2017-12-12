<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_3b3bec1c435dc38ba64b8329cca603bb5a4bbbe23df4c3944ca305c47fa5fcb7 extends Twig_Template
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
        $__internal_6d8ad0973ea4bc5af68d9d0b9c1422437262022bcb6a4606809d946c05bb4af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8ad0973ea4bc5af68d9d0b9c1422437262022bcb6a4606809d946c05bb4af0->enter($__internal_6d8ad0973ea4bc5af68d9d0b9c1422437262022bcb6a4606809d946c05bb4af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6d8ad0973ea4bc5af68d9d0b9c1422437262022bcb6a4606809d946c05bb4af0->leave($__internal_6d8ad0973ea4bc5af68d9d0b9c1422437262022bcb6a4606809d946c05bb4af0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
