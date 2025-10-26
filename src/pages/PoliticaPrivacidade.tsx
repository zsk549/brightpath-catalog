import Header from "@/components/Header";
import Footer from "@/components/Footer";
import { Shield } from "lucide-react";

const PoliticaPrivacidade = () => {
  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      
      <main className="flex-1 py-12 bg-background">
        <div className="container mx-auto px-4 max-w-4xl">
          <div className="flex items-center gap-3 mb-6">
            <Shield className="h-8 w-8 text-primary" />
            <h1 className="text-4xl font-bold">Política de Privacidade</h1>
          </div>

          <div className="prose prose-slate max-w-none space-y-6 text-foreground">
            <p className="text-muted-foreground">
              Última atualização: {new Date().toLocaleDateString('pt-BR')}
            </p>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">1. Informações que Coletamos</h2>
              <p>
                Coletamos informações que você nos fornece diretamente ao se cadastrar, fazer uma compra ou entrar em contato conosco:
              </p>
              <ul className="list-disc pl-6 space-y-2">
                <li>Nome completo e e-mail</li>
                <li>Dados de pagamento (processados de forma segura pela Hotmart)</li>
                <li>Histórico de cursos adquiridos</li>
                <li>Comunicações e correspondências conosco</li>
              </ul>
            </section>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">2. Como Usamos Suas Informações</h2>
              <p>Suas informações são utilizadas para:</p>
              <ul className="list-disc pl-6 space-y-2">
                <li>Processar e gerenciar suas compras de cursos</li>
                <li>Enviar confirmações de pedidos e atualizações sobre seus cursos</li>
                <li>Fornecer suporte ao cliente</li>
                <li>Melhorar nossos serviços e experiência do usuário</li>
                <li>Enviar comunicações de marketing (com seu consentimento)</li>
              </ul>
            </section>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">3. Proteção de Dados (LGPD)</h2>
              <p>
                Em conformidade com a Lei Geral de Proteção de Dados (LGPD - Lei nº 13.709/2018), garantimos:
              </p>
              <ul className="list-disc pl-6 space-y-2">
                <li>Seus dados são armazenados de forma segura e criptografada</li>
                <li>Não compartilhamos suas informações com terceiros sem seu consentimento</li>
                <li>Você pode solicitar acesso, correção ou exclusão dos seus dados a qualquer momento</li>
                <li>Mantemos seus dados apenas pelo tempo necessário para as finalidades descritas</li>
              </ul>
            </section>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">4. Compartilhamento de Informações</h2>
              <p>
                Compartilhamos suas informações apenas com:
              </p>
              <ul className="list-disc pl-6 space-y-2">
                <li>Hotmart (plataforma de pagamento e entrega de cursos)</li>
                <li>Provedores de serviços essenciais (hospedagem, e-mail)</li>
                <li>Autoridades legais, quando exigido por lei</li>
              </ul>
            </section>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">5. Cookies e Tecnologias Similares</h2>
              <p>
                Utilizamos cookies para melhorar sua experiência de navegação, analisar o tráfego do site e personalizar conteúdo. Você pode gerenciar as preferências de cookies nas configurações do seu navegador.
              </p>
            </section>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">6. Seus Direitos</h2>
              <p>Conforme a LGPD, você tem direito a:</p>
              <ul className="list-disc pl-6 space-y-2">
                <li>Confirmar a existência de tratamento de dados</li>
                <li>Acessar seus dados pessoais</li>
                <li>Corrigir dados incompletos, inexatos ou desatualizados</li>
                <li>Solicitar a anonimização, bloqueio ou eliminação de dados</li>
                <li>Revogar o consentimento</li>
              </ul>
            </section>

            <section className="space-y-4">
              <h2 className="text-2xl font-semibold">7. Contato</h2>
              <p>
                Para exercer seus direitos ou esclarecer dúvidas sobre esta política, entre em contato:
              </p>
              <p className="font-semibold">
                E-mail: contato@cursopro.com<br />
                Telefone: (13) 3821-1229<br />
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

export default PoliticaPrivacidade;