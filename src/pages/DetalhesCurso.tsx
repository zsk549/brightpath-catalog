import { useParams, Link } from "react-router-dom";
import Header from "@/components/Header";
import Footer from "@/components/Footer";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";
import { courses } from "@/data/courses";
import { CheckCircle, Clock, Award, ArrowLeft, Shield, RefreshCw } from "lucide-react";

const DetalhesCurso = () => {
  const { id } = useParams();
  const course = courses.find((c) => c.id === Number(id));

  if (!course) {
    return (
      <div className="min-h-screen flex flex-col">
        <Header />
        <main className="flex-1 flex items-center justify-center">
          <div className="text-center">
            <h1 className="text-3xl font-bold mb-4">Curso não encontrado</h1>
            <Link to="/cursos">
              <Button>Voltar para Cursos</Button>
            </Link>
          </div>
        </main>
        <Footer />
      </div>
    );
  }

  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      
      <main className="flex-1 py-12">
        <div className="container mx-auto px-4">
          <Link to="/cursos" className="inline-flex items-center gap-2 text-primary hover:underline mb-6">
            <ArrowLeft className="h-4 w-4" />
            Voltar para Cursos
          </Link>

          <div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {/* Conteúdo Principal */}
            <div className="lg:col-span-2">
              <Badge className="mb-4">{course.category}</Badge>
              
              <h1 className="text-4xl md:text-5xl font-bold mb-6">
                {course.title}
              </h1>

              <p className="text-lg text-muted-foreground mb-8">
                {course.description}
              </p>

              {/* Imagem de Capa */}
              <div className="relative overflow-hidden rounded-lg mb-8 aspect-video">
                <img
                  src={course.image}
                  alt={course.title}
                  className="w-full h-full object-cover"
                />
              </div>

              {/* Benefícios */}
              <div className="mb-8">
                <h2 className="text-2xl font-bold mb-4">O que você vai aprender</h2>
                <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                  <div className="flex items-start gap-3">
                    <CheckCircle className="h-6 w-6 text-accent flex-shrink-0 mt-1" />
                    <span>Conteúdo completo do básico ao avançado</span>
                  </div>
                  <div className="flex items-start gap-3">
                    <CheckCircle className="h-6 w-6 text-accent flex-shrink-0 mt-1" />
                    <span>Projetos práticos e reais</span>
                  </div>
                  <div className="flex items-start gap-3">
                    <CheckCircle className="h-6 w-6 text-accent flex-shrink-0 mt-1" />
                    <span>Material de apoio exclusivo</span>
                  </div>
                  <div className="flex items-start gap-3">
                    <CheckCircle className="h-6 w-6 text-accent flex-shrink-0 mt-1" />
                    <span>Suporte direto com o instrutor</span>
                  </div>
                </div>
              </div>

              {/* Conteúdo do Curso */}
              <div className="mb-8">
                <h2 className="text-2xl font-bold mb-4">Conteúdo do Curso</h2>
                <div className="space-y-3">
                  {course.topics.map((topic, index) => (
                    <div
                      key={index}
                      className="flex items-start gap-3 p-4 bg-card rounded-lg border"
                    >
                      <div className="flex-shrink-0 w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-semibold">
                        {index + 1}
                      </div>
                      <span className="flex-1">{topic}</span>
                    </div>
                  ))}
                </div>
              </div>
            </div>

            {/* Sidebar - Card de Compra */}
            <div className="lg:col-span-1">
              <div className="sticky top-24 bg-card p-6 rounded-lg shadow-[var(--shadow-card)] border">
                <div className="text-3xl font-bold text-primary mb-6">
                  R$ {course.price.toFixed(2)}
                </div>

                <a href={course.hotmartLink} target="_blank" rel="noopener noreferrer">
                  <Button className="w-full bg-accent hover:bg-accent/90 text-white font-semibold text-lg py-6 mb-4">
                    Comprar Agora
                  </Button>
                </a>

                {/* Avisos de Segurança e Garantia */}
                <div className="bg-muted/30 rounded-lg p-4 mb-4 space-y-3 border border-muted">
                  <div className="flex items-start gap-3">
                    <Shield className="h-5 w-5 text-primary flex-shrink-0 mt-0.5" />
                    <div className="text-sm">
                      <p className="font-medium text-foreground">Compra 100% segura</p>
                      <p className="text-muted-foreground">
                        Seus dados estão protegidos pela{" "}
                        <Link to="/politica-privacidade" className="text-primary hover:underline">
                          LGPD
                        </Link>
                      </p>
                    </div>
                  </div>
                  <div className="flex items-start gap-3">
                    <RefreshCw className="h-5 w-5 text-primary flex-shrink-0 mt-0.5" />
                    <div className="text-sm">
                      <p className="font-medium text-foreground">Garantia de 7 dias</p>
                      <p className="text-muted-foreground">
                        Direito de arrependimento{" "}
                        <Link to="/politica-troca" className="text-primary hover:underline">
                          (CDC)
                        </Link>
                      </p>
                    </div>
                  </div>
                </div>

                <div className="space-y-4 text-sm">
                  <div className="flex items-center gap-3">
                    <Clock className="h-5 w-5 text-muted-foreground" />
                    <span>Acesso vitalício</span>
                  </div>
                  <div className="flex items-center gap-3">
                    <Award className="h-5 w-5 text-muted-foreground" />
                    <span>Certificado de conclusão</span>
                  </div>
                  <div className="flex items-center gap-3">
                    <CheckCircle className="h-5 w-5 text-muted-foreground" />
                    <span>Garantia de 7 dias</span>
                  </div>
                </div>

                <div className="mt-6 pt-6 border-t">
                  <h3 className="font-semibold mb-3">Este curso inclui:</h3>
                  <ul className="space-y-2 text-sm text-muted-foreground">
                    <li>✓ Aulas em vídeo de alta qualidade</li>
                    <li>✓ Material didático para download</li>
                    <li>✓ Exercícios práticos</li>
                    <li>✓ Projetos reais</li>
                    <li>✓ Suporte por e-mail</li>
                    <li>✓ Atualizações gratuitas</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <Footer />
    </div>
  );
};

export default DetalhesCurso;
