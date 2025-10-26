import Header from "@/components/Header";
import Footer from "@/components/Footer";
import { RefreshCw } from "lucide-react";

const PoliticaTroca = () => {
  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      
      <main className="flex-1 py-12 bg-background">
        <div className="container mx-auto px-4 max-w-4xl">
          <div className="flex items-center gap-3 mb-6">
            <RefreshCw className="h-8 w-8 text-primary" />
            <h1 className="text-4xl font-bold">Política de Troca e Devolução</h1>
          </div>

          <div className="prose prose-slate max-w-none space-y-6 text-foreground">
            <p className="text-muted-foreground">
              Última atualização: {new Date().toLocaleDateString('pt-BR')}
            </p>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">1. Direito de Arrependimento (CDC)</h2>
              <p>
                Em conformidade com o Código de Defesa do Consumidor (CDC - Lei nº 8.078/1990, Artigo 49), você tem o direito de se arrepender da compra realizada no prazo de <strong>7 (sete) dias corridos</strong>, contados a partir da data da confirmação da compra ou do primeiro acesso ao curso.
              </p>
              <p>
                Durante este período, você pode solicitar o cancelamento e reembolso integral do valor pago, sem necessidade de justificativa.
              </p>
            </section>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">2. Como Solicitar o Reembolso</h2>
              <p>Para exercer seu direito de arrependimento:</p>
              <ol className="list-decimal pl-6 space-y-2">
                <li>Entre em contato através do e-mail: contato@cursopro.com</li>
                <li>Informe o número do pedido e o motivo da solicitação (opcional)</li>
                <li>Aguarde a confirmação do cancelamento em até 48 horas úteis</li>
                <li>O reembolso será processado em até 7 dias úteis após a confirmação</li>
              </ol>
            </section>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">3. Condições para Reembolso</h2>
              <p>O reembolso será concedido nas seguintes condições:</p>
              <ul className="list-disc pl-6 space-y-2">
                <li>Solicitação feita dentro do prazo de 7 dias corridos</li>
                <li>Para cursos não acessados ou com acesso mínimo (até 30% do conteúdo)</li>
                <li>O valor será devolvido na mesma forma de pagamento utilizada na compra</li>
              </ul>
            </section>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">4. Exceções</h2>
              <p>Não será possível realizar o reembolso em casos de:</p>
              <ul className="list-disc pl-6 space-y-2">
                <li>Solicitações feitas após o prazo de 7 dias</li>
                <li>Cursos que já foram concluídos em mais de 70% do conteúdo</li>
                <li>Download completo do material complementar do curso</li>
                <li>Violação dos Termos de Uso da plataforma</li>
              </ul>
            </section>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">5. Garantia de Satisfação</h2>
              <p>
                Além da garantia legal de 7 dias, oferecemos uma <strong>garantia estendida de satisfação</strong>. Se você não estiver satisfeito com o curso por qualquer motivo, terá 7 dias para solicitar o reembolso total.
              </p>
            </section>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">6. Problemas Técnicos</h2>
              <p>
                Caso você enfrente problemas técnicos que impeçam o acesso adequado ao curso:
              </p>
              <ul className="list-disc pl-6 space-y-2">
                <li>Entre em contato imediatamente com nosso suporte</li>
                <li>Descreva detalhadamente o problema encontrado</li>
                <li>Nossa equipe trabalhará para resolver a situação em até 48 horas</li>
                <li>Se o problema não for resolvido, o reembolso será garantido</li>
              </ul>
            </section>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">7. Processamento da Devolução</h2>
              <p>
                O reembolso será processado pela plataforma Hotmart, seguindo os prazos:
              </p>
              <ul className="list-disc pl-6 space-y-2">
                <li><strong>Cartão de crédito:</strong> estorno em até 2 faturas após aprovação</li>
                <li><strong>Boleto/Pix:</strong> depósito na conta bancária em até 7 dias úteis</li>
              </ul>
            </section>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">8. Contato para Suporte</h2>
              <p>
                Para solicitar reembolso ou esclarecer dúvidas:
              </p>
              <p className="font-semibold">
                E-mail: contato@cursopro.com<br />
                Telefone: (13) 3821-1229<br />
                Horário de atendimento: Segunda a Sexta, 9h às 18h<br />
                Endereço: R. Pres. Getúlio Vargas, 528 - Centro, Registro - SP, 11900-000
              </p>
            </section>
          </div>
        </div>
      </main>

      <Footer />
    </div>
  );
};

export default PoliticaTroca;