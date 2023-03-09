# Solicita ao usuário um número para verificar na sequência de Fibonacci
num = int(input("Digite um número para verificar na sequência de Fibonacci: "))

# Define os dois primeiros termos da sequência
fib1 = 0
fib2 = 1

# Loop para gerar os termos da sequência até que o próximo termo seja maior ou igual ao número informado
while fib2 < num:
    # Calcula o próximo termo da sequência
    fib3 = fib1 + fib2
    # Atualiza os valores dos termos anteriores
    fib1 = fib2
    fib2 = fib3

# Verifica se o número informado pertence à sequência
if fib2 == num:
    print(f"O número {num} pertence à sequência de Fibonacci.")
else:
    print(f"O número {num} não pertence à sequência de Fibonacci.")