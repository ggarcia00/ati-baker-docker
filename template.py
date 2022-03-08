from jinja2 import Template

def gerarLocationTemplateNginx(slug_arg, path):
    with open("./template-nginx/location_template.nginx", "r") as file:
        arquivoTemplate = file.read()
        template = Template(arquivoTemplate)
        
        templateProcessado = template.render(
            slug = slug_arg
        )

        arquivoTemplate = open(path, "w")
        arquivoTemplate.write(templateProcessado)


def gerarUpstreamTemplateNginx(slug_arg, path):
    with open("./template-nginx/upstream_template.nginx", "r") as file:
        arquivoTemplate = file.read()
        template = Template(arquivoTemplate)

        templateProcessado = template.render(
            slug = slug_arg
        )

        arquivoTemplate = open(path, "w")
        arquivoTemplate.write(templateProcessado)