# Questões Teóricas
- Qual a diferença entre FLOAT e INT?
# Resposta: 
# FLOAT e INT são tipos de dados numéricos diferentes. A principal diferença entre eles é que FLOAT representa números de ponto flutuante com uma precisão de várias casas decimais, enquanto INT representa números inteiros, sem casas decimais. Em outras palavras, FLOAT é usado para representar números com frações, enquanto INT é usado para representar números inteiros.
- Qual a diferença entre a função floor() e ceil()?
# Resposta:
# As funções floor() e ceil() são ambas funções de arredondamento de números em programação. A principal diferença entre elas é a direção do arredondamento:

# A função floor() arredonda um número para baixo para o número inteiro mais próximo.
# A função ceil() arredonda um número para cima para o número inteiro mais próximo.
# Por exemplo, o valor de floor(3.14) seria 3, enquanto o valor de ceil(3.14) seria 4.

- Para validar um dado enviado por formulário, preciso de alguma biblioteca externa? Por que?
# Resposta:
# Não é necessário usar uma biblioteca externa para validar dados enviados por formulário, pois é possível fazer a validação usando apenas linguagem de programação, como PHP ou JavaScript, dependendo da tecnologia usada para criar o formulário. No entanto, muitas vezes é mais fácil e eficiente usar bibliotecas pré-existentes, especialmente se você precisar de funcionalidades de validação mais avançadas ou se desejar economizar tempo e esforço.

 # Algumas das vantagens de usar bibliotecas externas incluem a disponibilidade de regras de validação pré-definidas, suporte para vários tipos de dados, compatibilidade com diferentes tipos de formulários, suporte para vários idiomas e facilidade de personalização.

# Algumas das bibliotecas mais populares para validação de formulários incluem o jQuery Validate, o Parsley e o Vee-Validate.

- Qual a lógica de dividir a conta de restaurante para as pessoas da mesa?

# A lógica para dividir a conta de um restaurante entre as pessoas da mesa pode variar de acordo com as preferências de cada pessoa ou grupo, mas uma forma comum é seguir os seguintes passos:

# Calcular o total da conta: Adicione o valor de todos os itens consumidos na mesa.

# Dividir o total da conta pelo número de pessoas na mesa: Isso dará o valor individual que cada pessoa deve pagar.

# Ajustar o valor individual se necessário: Algumas pessoas podem ter consumido mais ou menos do que outras, então é possível ajustar o valor individual para que todas as pessoas paguem a sua parte justa.

# Pagar a conta: Cada pessoa paga sua parte individual da conta.

# Lembre-se de que essa é uma forma simples e comum de dividir a conta, e que a forma como a conta é dividida pode ser personalizada de acordo com as preferências de cada grupo.
- Projeto prático
# Crie um sistema onde é possível especificar quanto foi o TOTAL da conta do restaurante, bem como quantas pessoas estão na mesa, para que o sistema possa dividir a conta pelas pessoas na mesa.

# O sistema deve:

# Validar que você está digitando número, em ambos os campos (total e quantidade de pessoas).
# O campo de total deve aceitar FLOAT, já o campo de pessoas deve aceitar apenas INTEIRO.
# O valor à dividir deve ser arredondado para ficar com no máximo 2 casas decimais.
# O design do sistema não tem tanta relevância, contudo a estruturação da interface deve-se prestar atenção.