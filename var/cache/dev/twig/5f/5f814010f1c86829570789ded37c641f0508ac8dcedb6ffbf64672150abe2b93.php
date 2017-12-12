<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3136a31dc8d3d3ee4bc37f83072fec772eb07f997f5fb6320ef2d093f0265186 extends Twig_Template
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
        $__internal_726e989c504ac3d4b607372d49c6c2a96d2263a230be873b7e52bb22d1a9563c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726e989c504ac3d4b607372d49c6c2a96d2263a230be873b7e52bb22d1a9563c->enter($__internal_726e989c504ac3d4b607372d49c6c2a96d2263a230be873b7e52bb22d1a9563c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_726e989c504ac3d4b607372d49c6c2a96d2263a230be873b7e52bb22d1a9563c->leave($__internal_726e989c504ac3d4b607372d49c6c2a96d2263a230be873b7e52bb22d1a9563c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
