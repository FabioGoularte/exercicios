const faturamentoMensal = {
    SP: 67836.43,
    RJ: 36678.66,
    MG: 29229.88,
    ES: 27165.48,
    Outros: 19849.53,
  };
  
  // Calculando o total mensal de faturamento
  const totalMensal = Object.values(faturamentoMensal).reduce(
    (total, valor) => total + valor
  );
  
  // Calculando o percentual de representação de cada estado
  const percentuais: { [estado: string]: number } = {};
  Object.entries(faturamentoMensal).forEach(([estado, valor]) => {
    const percentual = (valor / totalMensal) * 100;
    percentuais[estado] = percentual;
  });
  
  // Imprimindo os resultados
  console.log(`Total mensal de faturamento: R$${totalMensal.toFixed(2)}`);
  console.log("Percentual de representação por estado:");
  Object.entries(percentuais).forEach(([estado, percentual]) => {
    console.log(`${estado}: ${percentual.toFixed(2)}%`);
  })
  
  
  
  