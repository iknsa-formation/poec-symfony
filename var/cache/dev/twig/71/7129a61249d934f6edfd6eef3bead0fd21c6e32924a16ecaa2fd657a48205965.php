<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_09bc1de776ac9c7dc443db4a1d91a56a24fac3207d21adb1e438017dbc48d9d0 extends Twig_Template
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
        $__internal_bfd05654a64f0dbbab6723d8869ad5db9c6453bbe6305c5119968c3988453d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd05654a64f0dbbab6723d8869ad5db9c6453bbe6305c5119968c3988453d3b->enter($__internal_bfd05654a64f0dbbab6723d8869ad5db9c6453bbe6305c5119968c3988453d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bfd05654a64f0dbbab6723d8869ad5db9c6453bbe6305c5119968c3988453d3b->leave($__internal_bfd05654a64f0dbbab6723d8869ad5db9c6453bbe6305c5119968c3988453d3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
