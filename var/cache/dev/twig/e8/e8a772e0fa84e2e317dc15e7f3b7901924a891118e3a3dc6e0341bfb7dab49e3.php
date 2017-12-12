<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7922b4f5805070336802a13418e1bc1813fa34162d6a7ad38f5f2e61938be59d extends Twig_Template
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
        $__internal_4e59d2d867e4668fe83be05110c21e9c7a598da8778d5934ae061316054ffe6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e59d2d867e4668fe83be05110c21e9c7a598da8778d5934ae061316054ffe6f->enter($__internal_4e59d2d867e4668fe83be05110c21e9c7a598da8778d5934ae061316054ffe6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4e59d2d867e4668fe83be05110c21e9c7a598da8778d5934ae061316054ffe6f->leave($__internal_4e59d2d867e4668fe83be05110c21e9c7a598da8778d5934ae061316054ffe6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
