# solicita a entrada da string ao usuário
string = input("Digite uma string: ")

# inicializa uma variável vazia para armazenar a string invertida
string_invertida = ""

# itera pela string original, adicionando cada caractere ao início da string invertida
for i in range(len(string)):
    string_invertida = string[i] + string_invertida

# exibe a string invertida
print("A string invertida é:", string_invertida)