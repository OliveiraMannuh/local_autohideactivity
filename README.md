Plugin Moodle

Auto Hide Activity Plugin → Ocultar Atividade Automaticamente

Este plugin para Moodle 4.1.13+ automaticamente oculta atividades criadas por professores (editingteacher) e permite que moderadores (teacher) gerenciem a visibilidade dessas atividades.

Requisitos

Moodle versão 4.1.13 ou superior
PHP 7.4 ou superior

Instalação

Faça o download do plugin
Extraia os arquivos para a pasta /local/autohideactivity do seu Moodle
Acesse como administrador e complete o processo de instalação

Configuração de Permissões

Para o correto funcionamento do plugin, as seguintes permissões devem ser configuradas:

Professor (editingteacher):

moodle/course:manageactivities (Padrão)
moodle/course:activityvisibility (Padrão)
local/autohideactivity:managehidden (Adicionada pelo plugin)
Ocultar/Mostrar atividades
moodle/course:activityvisibility (NEGAR)

Moderador (teacher):
moodle/course:activityvisibility (Padrão)
local/autohideactivity:managehidden (Adicionada pelo plugin)

Estudante (student):
Nenhuma permissão adicional necessária

Funcionalidades:

Ocultação Automática: Quando um professor (editingteacher) cria uma nova atividade, ela é automaticamente ocultada dos estudantes.
Gerenciamento de Visibilidade: Somente moderadores podem: 
Mostrar/ocultar atividades
Gerenciar a visibilidade das atividades através da capacidade managehidden


Suporte a Idiomas:

O plugin inclui suporte para os seguintes idiomas:

Inglês (en)
Português do Brasil (pt_br)

Suporte:

Para reportar problemas ou sugerir melhorias, por favor abra uma issue no repositório do projeto.

