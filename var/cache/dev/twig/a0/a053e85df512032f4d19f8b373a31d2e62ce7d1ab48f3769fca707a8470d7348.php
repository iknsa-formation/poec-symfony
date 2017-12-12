<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d1184cbfc470a70ba8e965fdd3fc1b375dbdb54230d0c339d218ff970a52e820 extends Twig_Template
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
        $__internal_b5e0d8ac1787578ed51cc6e830015aa0b69bcc815d91e1ec2c99f6a71875409a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e0d8ac1787578ed51cc6e830015aa0b69bcc815d91e1ec2c99f6a71875409a->enter($__internal_b5e0d8ac1787578ed51cc6e830015aa0b69bcc815d91e1ec2c99f6a71875409a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b5e0d8ac1787578ed51cc6e830015aa0b69bcc815d91e1ec2c99f6a71875409a->leave($__internal_b5e0d8ac1787578ed51cc6e830015aa0b69bcc815d91e1ec2c99f6a71875409a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
