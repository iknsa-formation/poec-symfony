<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3c1365bed73e4c05393ea86f1ebdb811e32eebd72302b1f61f694139aabcd738 extends Twig_Template
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
        $__internal_0524d612818d9b0da95de76e1f0671653f9c1f15246cc2985284f57ffa74d6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0524d612818d9b0da95de76e1f0671653f9c1f15246cc2985284f57ffa74d6b4->enter($__internal_0524d612818d9b0da95de76e1f0671653f9c1f15246cc2985284f57ffa74d6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0524d612818d9b0da95de76e1f0671653f9c1f15246cc2985284f57ffa74d6b4->leave($__internal_0524d612818d9b0da95de76e1f0671653f9c1f15246cc2985284f57ffa74d6b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
