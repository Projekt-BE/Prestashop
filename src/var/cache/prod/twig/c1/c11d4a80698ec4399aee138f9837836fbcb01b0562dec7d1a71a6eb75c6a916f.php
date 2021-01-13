<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Improve/Design/Cms/Blocks/category_form.html.twig */
class __TwigTemplate_4444e1512953816b6db9c84d459ec13ff918af256b3e7bdc7b53e30f25ac9942 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'category_form' => [$this, 'block_category_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/category_form.html.twig", 26);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('category_form', $context, $blocks);
    }

    public function block_category_form($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cmsPageCategoryForm"] ?? null), 'form_start');
        echo "

  <div class=\"card\">
    <div class=\"card-header\">
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CMS Category", [], "Admin.Design.Feature"), "html", null, true);
        echo "
    </div>
    <div class=\"card-block row\">
      <div class=\"card-text\">

        ";
        // line 38
        $context["invalidCharactersForCatalogLabel"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . "<>;=#{}");
        // line 39
        echo "        ";
        $context["invalidCharactersForNameLabel"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . "<>={}");
        // line 40
        echo "
        ";
        // line 41
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? null), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "help" =>         // line 43
($context["invalidCharactersForCatalogLabel"] ?? null)]);
        // line 44
        echo "

        ";
        // line 46
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? null), "is_displayed", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Displayed", [], "Admin.Global")]);
        // line 48
        echo "

        ";
        // line 50
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? null), "parent_category", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Parent category", [], "Admin.Design.Feature")]);
        // line 52
        echo "

        ";
        // line 54
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? null), "description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "Admin.Global")]);
        // line 56
        echo "

        ";
        // line 58
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? null), "meta_title", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta title", [], "Admin.Global"), "help" =>         // line 60
($context["invalidCharactersForNameLabel"] ?? null)]);
        // line 61
        echo "

        ";
        // line 63
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? null), "meta_description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta description", [], "Admin.Global"), "help" =>         // line 65
($context["invalidCharactersForNameLabel"] ?? null)]);
        // line 66
        echo "

        ";
        // line 68
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? null), "meta_keywords", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta keywords", [], "Admin.Global"), "help" =>         // line 70
($context["invalidCharactersForNameLabel"] ?? null)]);
        // line 71
        echo "

        ";
        // line 73
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? null), "friendly_url", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URL", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Only letters and the minus (-) character are allowed.", [], "Admin.Catalog.Help")]);
        // line 76
        echo "

        ";
        // line 78
        if ($this->getAttribute(($context["cmsPageCategoryForm"] ?? null), "shop_association", [], "any", true, true)) {
            // line 79
            echo "          ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? null), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global")]);
            // line 81
            echo "
        ";
        }
        // line 83
        echo "
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cms_pages_index", ["id_cms_category" => ($context["cmsCategoryParentId"] ?? null)]), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
      </div>
      <div class=\"d-inline-flex float-right\">
        <button class=\"btn btn-primary\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>

  </div>

  ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["cmsPageCategoryForm"] ?? null), 'rest');
        echo "
  ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cmsPageCategoryForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/Blocks/category_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 101,  158 => 100,  149 => 94,  142 => 90,  138 => 89,  130 => 83,  126 => 81,  123 => 79,  121 => 78,  117 => 76,  115 => 73,  111 => 71,  109 => 70,  108 => 68,  104 => 66,  102 => 65,  101 => 63,  97 => 61,  95 => 60,  94 => 58,  90 => 56,  88 => 54,  84 => 52,  82 => 50,  78 => 48,  76 => 46,  72 => 44,  70 => 43,  69 => 41,  66 => 40,  63 => 39,  61 => 38,  53 => 33,  45 => 29,  39 => 28,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/category_form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Cms/Blocks/category_form.html.twig");
    }
}
