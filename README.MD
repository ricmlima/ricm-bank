# RICM BANK

### Requisitos e descrições


- **Sistema de Autenticação:**
RPermitir que os usuários se autentiquem usando um número de conta e senha.
- **Gerenciamento de Contas:**
Permitir que os usuários criem e cancelem contas bancárias pessoais e jurídicas em uma agência.
As contas devem ser identificadas por um número de conta exclusivo.
Cada conta deve ter informações como saldo, data de criação, titular da conta e tipo de conta (pessoal ou jurídica).
- **Transações:**
Permitir que os usuários realizem transações como transferências e pagamentos.
As transações devem ser autorizadas usando o número da conta e senha do usuário.
As transações devem ter informações como o número da conta do destinatário, o valor da transação e uma descrição opcional.
Registrar todas as transações realizadas pelos usuários e manter um histórico das transações em cada conta.
- **Gerenciamento de Usuários:**
Permitir cadastros de usuários com níveis de acesso gerente e/ou cliente.
Os usuários devem fornecer informações básicas de identificação, como nome, endereço, número de telefone e e-mail.
Os usuários devem ser capazes de visualizar suas informações pessoais e de conta e seu histórico de transações.
Os usuários gerentes devem ser capazes de visualizar informações de todas as contas em sua agência e realizar operações bancárias em nome dos clientes com a autorização do cliente.
Somente gerentes podem cadastrar gerentes.
- **Relatórios e Consultas:**
Gerar relatórios e consultorios sobre suas contas e transações.
Os relatórios devem incluir informações como saldo atual, histórico de transações.
Os usuários gerentes devem ser capazes de gerar relatórios para todas as contas em sua agência.
- **Gerente:**
Usuário responsável pela gestão das agências e contas bancárias, com acesso a funcionalidades administrativas, como criação e cancelamento de contas entre outras. Além disso, ele pode visualizar informações e relatórios de desempenho das agências e contas sob sua responsabilidade.

- **Cliente::** Usuário com acesso limitado ao sistema bancário, podendo realizar operações básicas como transferências e pagamentos, consulta de saldos e extratos, entre outras funcionalidades. O cliente também tem acesso à sua área de perfil, onde pode atualizar informações pessoais e gerenciar suas preferências.
