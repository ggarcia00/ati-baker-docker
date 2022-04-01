from jinja2 import Template


def gerarTemplateNginx(slug_arg, rewrite_arg, path):
    with open("./template-nginx/template.conf", "r") as file:
        arquivoTemplate = file.read()
        template = Template(arquivoTemplate)

        templateProcessado = template.render(
            slug = slug_arg,
            rewrite = rewrite_arg
        )

        arquivoTemplate = open(path, "w")
        arquivoTemplate.write(templateProcessado)
