<?php

/* @WebProfiler/Profiler/base.html.twig */
class __TwigTemplate_c60e2e7efc6abac6cf714f65703df8787df448a808cea5845df1f32acdc71f4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e79a018adaf319f80827178efc6d487026b7465dc805759dd0f15a3434a53214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79a018adaf319f80827178efc6d487026b7465dc805759dd0f15a3434a53214->enter($__internal_e79a018adaf319f80827178efc6d487026b7465dc805759dd0f15a3434a53214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        $__internal_1cb2f33d33d4b049b643bb3841b7cfcd4831ee0bc0ab9e78f1f513c92eb12a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb2f33d33d4b049b643bb3841b7cfcd4831ee0bc0ab9e78f1f513c92eb12a15->enter($__internal_1cb2f33d33d4b049b643bb3841b7cfcd4831ee0bc0ab9e78f1f513c92eb12a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>Symfony Profiler</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFEUlEQVR4AZVXA4wm2RMf27bXDM/+3/+sYBGfrbVtezc6BWtzfPbYXtvDL9906t6v0vWl05me7q1JzXuvvu4yXnvZgJ9hH6bwZYXLFR739vauUGuDwhq1L1N4Uv/tRYUhFjwcg49hn6aYr1V4TiGp86CoP9Oh1tV414KnM6t9fHymKUZ3DAI0hW4b1AyK3lE8phh5OxWeoJgUGhi5mLm95YzBwcHuhIQEV1JSEoWGhoKWHxYWFmenhJ/B5W0GwZpDt5Ovry9lZWWRyWOu5ORk7JsUpogsq5gnmISTU+HKQoLFQv/qq6/os88+I+EVFRUlSsRZ5oRiVmwlXMWShQkahUdERJCfnx/vd+3aRTU1NXTixAmqrq6mK1eu0PTp05mnrmD+QK6XhLO0XP2O2FJAQICRjjMU4P1PP/1EfX19NGfOHM8Z0N7ezueQkBBXYGAgSWIaQ5Em2T5QzFNSUig9PV3OHOe4uDjZ87p//34C7Nm7x/NcRUUFAX799Vec8Y7m7+8Pz92SfBDXr7VwPYRbxn/MmDG8Tps2jQBd3V30/PPPe35/6qmnaPXq1TR69Gg+h4eHiwwosdLT4dBkQDSXWmJiIq/vv/8+/fvvv3ThwgWqr6+n/Px8oyCmAerq6jy03Nxc2Yv7ySSjQzrmi4i92fVpaWlYOZ79/f2MW7dtpSlTptDp06epo6ODPvroI850ASiGdyZOnEjXrl2jyspKT4XA9cgjkaPL/D8UWG62HokieyQQoKSkRGiMs2bNotraWmprayOBNWvWyO+scGdnp5zF/WYvLEb8TwpRykp1MV7feust6uzqJMD169fpueeeY/rDDz/MKzzgdrsJoGkaffvtt/TFF19wQsIDmzZtssojt+6Fo1CgzKiAvAB3DRs2jAULtLS0eErPGB5Ad3c3lZaWUnFxMfeAd955h5+JjY3FaqXAPwhBnRCNySK4b98+Aoilv/z6i/zGggSk1g0opWupAMvGP91yt96zadWqVdTc3Ezz58/31LOAy+US6zgHBP766y+mDR8+HBUgFWSnQI2EAFnqlpcaGxsJIFkMN8L9AnPnzmX6jRs3SACeAi0vL888JwYPgTEJpauhnADo6/LSgQMHCHD37l2Cp15//XXq7eslgKb+Fi1exM9lZmbaCDclIcpQQhATE4OVsrOzuamg+cyePZuzG64Hrlu3jp9ZuWolCdy+fZueeOIJpkdHR1sLHqgM0Yh0bTRz1m7fvp2KiopYkYKCApo8ebLZIwzlFeXSOXEnsLPe2Ij+p5DbYYdOdOtDQ0rNjFya5sTcsGGDcTDZoXTcNoVBMoxWyzDS2yXmOyeUtGSskmDjx4/nRgPAfBDmMpZtUIbRcsi2GsfSD2QYyd2OcdmyZSSwdu1apuXk5GB16v4bak0yX0imyIUEgwNovFTglhMZGcm0srIy43zAVUxuTLbW4xn17Fci23wly9dngUummrTaixcvMpOtW7fiiBwQpqKYU9efHuxDJE5hC9wvL9TW1RLg+PHjPGTQ8wsLC4WpDC5Y5UR4k5qKMSLT6lqeAiX0nuAaMmSI9sMPP9CZM2foyJEj9O677wpTVIuTjidNp0HibvttoH9E5OMqbWKkSaNSlojldoLF7TEP+nUEmKI62y1kOBINbVaNarcI0PuGGUlHyfYvLHg7/jhFSFYqZh0P8KHSptd5ksOPU3tvqAEUot/hFmOIYJLp87wGe9Dwm95eg5xa/R8G6d8U5EcFhwAAAABJRU5ErkJggg==\">

        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_e79a018adaf319f80827178efc6d487026b7465dc805759dd0f15a3434a53214->leave($__internal_e79a018adaf319f80827178efc6d487026b7465dc805759dd0f15a3434a53214_prof);

        
        $__internal_1cb2f33d33d4b049b643bb3841b7cfcd4831ee0bc0ab9e78f1f513c92eb12a15->leave($__internal_1cb2f33d33d4b049b643bb3841b7cfcd4831ee0bc0ab9e78f1f513c92eb12a15_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8d64a3d22ee8c73136e6a96beb0d96f9b69b47f0941beff8983715d47fe0c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d64a3d22ee8c73136e6a96beb0d96f9b69b47f0941beff8983715d47fe0c5d->enter($__internal_a8d64a3d22ee8c73136e6a96beb0d96f9b69b47f0941beff8983715d47fe0c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a55373f283f362584115527f3bc47e6d5620a7682c16c41eae1fa638b3245c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a55373f283f362584115527f3bc47e6d5620a7682c16c41eae1fa638b3245c3->enter($__internal_5a55373f283f362584115527f3bc47e6d5620a7682c16c41eae1fa638b3245c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 11
        echo "            <style>
                ";
        // line 12
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/profiler.css.twig");
        echo "
            </style>
        ";
        
        $__internal_5a55373f283f362584115527f3bc47e6d5620a7682c16c41eae1fa638b3245c3->leave($__internal_5a55373f283f362584115527f3bc47e6d5620a7682c16c41eae1fa638b3245c3_prof);

        
        $__internal_a8d64a3d22ee8c73136e6a96beb0d96f9b69b47f0941beff8983715d47fe0c5d->leave($__internal_a8d64a3d22ee8c73136e6a96beb0d96f9b69b47f0941beff8983715d47fe0c5d_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_b65a0edd65c8b10f837ca07ad7c9ea42136af2bd70f2a5225e8aa83f4da7b318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65a0edd65c8b10f837ca07ad7c9ea42136af2bd70f2a5225e8aa83f4da7b318->enter($__internal_b65a0edd65c8b10f837ca07ad7c9ea42136af2bd70f2a5225e8aa83f4da7b318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_306bbf97db9d6ee788ceda5c7a14dfa392f7be0ca017439b688eb37b39aeca20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306bbf97db9d6ee788ceda5c7a14dfa392f7be0ca017439b688eb37b39aeca20->enter($__internal_306bbf97db9d6ee788ceda5c7a14dfa392f7be0ca017439b688eb37b39aeca20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_306bbf97db9d6ee788ceda5c7a14dfa392f7be0ca017439b688eb37b39aeca20->leave($__internal_306bbf97db9d6ee788ceda5c7a14dfa392f7be0ca017439b688eb37b39aeca20_prof);

        
        $__internal_b65a0edd65c8b10f837ca07ad7c9ea42136af2bd70f2a5225e8aa83f4da7b318->leave($__internal_b65a0edd65c8b10f837ca07ad7c9ea42136af2bd70f2a5225e8aa83f4da7b318_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 17,  73 => 12,  70 => 11,  61 => 10,  49 => 18,  47 => 17,  43 => 15,  41 => 10,  32 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>Symfony Profiler</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFEUlEQVR4AZVXA4wm2RMf27bXDM/+3/+sYBGfrbVtezc6BWtzfPbYXtvDL9906t6v0vWl05me7q1JzXuvvu4yXnvZgJ9hH6bwZYXLFR739vauUGuDwhq1L1N4Uv/tRYUhFjwcg49hn6aYr1V4TiGp86CoP9Oh1tV414KnM6t9fHymKUZ3DAI0hW4b1AyK3lE8phh5OxWeoJgUGhi5mLm95YzBwcHuhIQEV1JSEoWGhoKWHxYWFmenhJ/B5W0GwZpDt5Ovry9lZWWRyWOu5ORk7JsUpogsq5gnmISTU+HKQoLFQv/qq6/os88+I+EVFRUlSsRZ5oRiVmwlXMWShQkahUdERJCfnx/vd+3aRTU1NXTixAmqrq6mK1eu0PTp05mnrmD+QK6XhLO0XP2O2FJAQICRjjMU4P1PP/1EfX19NGfOHM8Z0N7ezueQkBBXYGAgSWIaQ5Em2T5QzFNSUig9PV3OHOe4uDjZ87p//34C7Nm7x/NcRUUFAX799Vec8Y7m7+8Pz92SfBDXr7VwPYRbxn/MmDG8Tps2jQBd3V30/PPPe35/6qmnaPXq1TR69Gg+h4eHiwwosdLT4dBkQDSXWmJiIq/vv/8+/fvvv3ThwgWqr6+n/Px8oyCmAerq6jy03Nxc2Yv7ySSjQzrmi4i92fVpaWlYOZ79/f2MW7dtpSlTptDp06epo6ODPvroI850ASiGdyZOnEjXrl2jyspKT4XA9cgjkaPL/D8UWG62HokieyQQoKSkRGiMs2bNotraWmprayOBNWvWyO+scGdnp5zF/WYvLEb8TwpRykp1MV7feust6uzqJMD169fpueeeY/rDDz/MKzzgdrsJoGkaffvtt/TFF19wQsIDmzZtssojt+6Fo1CgzKiAvAB3DRs2jAULtLS0eErPGB5Ad3c3lZaWUnFxMfeAd955h5+JjY3FaqXAPwhBnRCNySK4b98+Aoilv/z6i/zGggSk1g0opWupAMvGP91yt96zadWqVdTc3Ezz58/31LOAy+US6zgHBP766y+mDR8+HBUgFWSnQI2EAFnqlpcaGxsJIFkMN8L9AnPnzmX6jRs3SACeAi0vL888JwYPgTEJpauhnADo6/LSgQMHCHD37l2Cp15//XXq7eslgKb+Fi1exM9lZmbaCDclIcpQQhATE4OVsrOzuamg+cyePZuzG64Hrlu3jp9ZuWolCdy+fZueeOIJpkdHR1sLHqgM0Yh0bTRz1m7fvp2KiopYkYKCApo8ebLZIwzlFeXSOXEnsLPe2Ij+p5DbYYdOdOtDQ0rNjFya5sTcsGGDcTDZoXTcNoVBMoxWyzDS2yXmOyeUtGSskmDjx4/nRgPAfBDmMpZtUIbRcsi2GsfSD2QYyd2OcdmyZSSwdu1apuXk5GB16v4bak0yX0imyIUEgwNovFTglhMZGcm0srIy43zAVUxuTLbW4xn17Fci23wly9dngUummrTaixcvMpOtW7fiiBwQpqKYU9efHuxDJE5hC9wvL9TW1RLg+PHjPGTQ8wsLC4WpDC5Y5UR4k5qKMSLT6lqeAiX0nuAaMmSI9sMPP9CZM2foyJEj9O677wpTVIuTjidNp0HibvttoH9E5OMqbWKkSaNSlojldoLF7TEP+nUEmKI62y1kOBINbVaNarcI0PuGGUlHyfYvLHg7/jhFSFYqZh0P8KHSptd5ksOPU3tvqAEUot/hFmOIYJLp87wGe9Dwm95eg5xa/R8G6d8U5EcFhwAAAABJRU5ErkJggg==\">

        {% block head %}
            <style>
                {{ include('@WebProfiler/Profiler/profiler.css.twig') }}
            </style>
        {% endblock %}
    </head>
    <body>
        {% block body '' %}
    </body>
</html>
", "@WebProfiler/Profiler/base.html.twig", "C:\\wamp64\\www\\PPE-4\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\base.html.twig");
    }
}