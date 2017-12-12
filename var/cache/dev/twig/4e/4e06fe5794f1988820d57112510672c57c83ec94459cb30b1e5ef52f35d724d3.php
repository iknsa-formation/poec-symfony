<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_261d67e3070f5eaaa248fbca53e884ef765bb36f4896e8da6fd6e64c5fa7d010 extends Twig_Template
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
        $__internal_0601c793025e6e963289d92d6ea9387b8e3a9044dcf66ed46933d9ba4b47b307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0601c793025e6e963289d92d6ea9387b8e3a9044dcf66ed46933d9ba4b47b307->enter($__internal_0601c793025e6e963289d92d6ea9387b8e3a9044dcf66ed46933d9ba4b47b307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0601c793025e6e963289d92d6ea9387b8e3a9044dcf66ed46933d9ba4b47b307->leave($__internal_0601c793025e6e963289d92d6ea9387b8e3a9044dcf66ed46933d9ba4b47b307_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
