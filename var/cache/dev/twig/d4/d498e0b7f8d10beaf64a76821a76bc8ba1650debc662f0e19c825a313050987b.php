<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a66f7feeccc64ec58a7671d7832396430d88f2e27434edb21459be8430e2f116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c8abf0980170c79b82d89c928fbaf8f29b73de0f51b72772244e65242c49479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c8abf0980170c79b82d89c928fbaf8f29b73de0f51b72772244e65242c49479->enter($__internal_4c8abf0980170c79b82d89c928fbaf8f29b73de0f51b72772244e65242c49479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2d01e42f2bb9198f5162291553d7e55d6e2d83ffd7bc70a8827f5cd364e5525d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d01e42f2bb9198f5162291553d7e55d6e2d83ffd7bc70a8827f5cd364e5525d->enter($__internal_2d01e42f2bb9198f5162291553d7e55d6e2d83ffd7bc70a8827f5cd364e5525d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c8abf0980170c79b82d89c928fbaf8f29b73de0f51b72772244e65242c49479->leave($__internal_4c8abf0980170c79b82d89c928fbaf8f29b73de0f51b72772244e65242c49479_prof);

        
        $__internal_2d01e42f2bb9198f5162291553d7e55d6e2d83ffd7bc70a8827f5cd364e5525d->leave($__internal_2d01e42f2bb9198f5162291553d7e55d6e2d83ffd7bc70a8827f5cd364e5525d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_70c54d2b6cc4df22a4a2503b85c6c3e61291b0a7389039c5f5a955be8615b359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c54d2b6cc4df22a4a2503b85c6c3e61291b0a7389039c5f5a955be8615b359->enter($__internal_70c54d2b6cc4df22a4a2503b85c6c3e61291b0a7389039c5f5a955be8615b359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d38fb06082ba043d39716d011200864ba7e0635841d2c5e9f212f2d5080126b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38fb06082ba043d39716d011200864ba7e0635841d2c5e9f212f2d5080126b7->enter($__internal_d38fb06082ba043d39716d011200864ba7e0635841d2c5e9f212f2d5080126b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d38fb06082ba043d39716d011200864ba7e0635841d2c5e9f212f2d5080126b7->leave($__internal_d38fb06082ba043d39716d011200864ba7e0635841d2c5e9f212f2d5080126b7_prof);

        
        $__internal_70c54d2b6cc4df22a4a2503b85c6c3e61291b0a7389039c5f5a955be8615b359->leave($__internal_70c54d2b6cc4df22a4a2503b85c6c3e61291b0a7389039c5f5a955be8615b359_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc608b711648ceeaed1759ade748f849e8f54ed58e2a2c189ef79cc18f1aaab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc608b711648ceeaed1759ade748f849e8f54ed58e2a2c189ef79cc18f1aaab3->enter($__internal_bc608b711648ceeaed1759ade748f849e8f54ed58e2a2c189ef79cc18f1aaab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c804b46b0e1889e7a6955d974988eaf54d2afaf7fd4dde92a4e344caf3094c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c804b46b0e1889e7a6955d974988eaf54d2afaf7fd4dde92a4e344caf3094c78->enter($__internal_c804b46b0e1889e7a6955d974988eaf54d2afaf7fd4dde92a4e344caf3094c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c804b46b0e1889e7a6955d974988eaf54d2afaf7fd4dde92a4e344caf3094c78->leave($__internal_c804b46b0e1889e7a6955d974988eaf54d2afaf7fd4dde92a4e344caf3094c78_prof);

        
        $__internal_bc608b711648ceeaed1759ade748f849e8f54ed58e2a2c189ef79cc18f1aaab3->leave($__internal_bc608b711648ceeaed1759ade748f849e8f54ed58e2a2c189ef79cc18f1aaab3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d299b215179d467c6fa64aa39bd147ed87fbb95e011864af9c1184aa87f254c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d299b215179d467c6fa64aa39bd147ed87fbb95e011864af9c1184aa87f254c->enter($__internal_6d299b215179d467c6fa64aa39bd147ed87fbb95e011864af9c1184aa87f254c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_310f17dca6c8da9831a2d4a1efba79b6be7bf26152010e82c92622d37b4a25b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310f17dca6c8da9831a2d4a1efba79b6be7bf26152010e82c92622d37b4a25b1->enter($__internal_310f17dca6c8da9831a2d4a1efba79b6be7bf26152010e82c92622d37b4a25b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_310f17dca6c8da9831a2d4a1efba79b6be7bf26152010e82c92622d37b4a25b1->leave($__internal_310f17dca6c8da9831a2d4a1efba79b6be7bf26152010e82c92622d37b4a25b1_prof);

        
        $__internal_6d299b215179d467c6fa64aa39bd147ed87fbb95e011864af9c1184aa87f254c->leave($__internal_6d299b215179d467c6fa64aa39bd147ed87fbb95e011864af9c1184aa87f254c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "I:\\projects\\mon-nouveau\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
