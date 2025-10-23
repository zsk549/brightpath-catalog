import { Link } from "react-router-dom";
import { Button } from "@/components/ui/button";
import Header from "@/components/Header";
import Footer from "@/components/Footer";
import Hero from "@/components/Hero";
import CourseCard from "@/components/CourseCard";
import { courses } from "@/data/courses";
import { Star, Users, Award, TrendingUp } from "lucide-react";
import testimonialMaria from "@/assets/testimonial-maria.jpg";
import testimonialJoao from "@/assets/testimonial-joao.jpg";
import testimonialAna from "@/assets/testimonial-ana.jpg";

const Home = () => {
  const featuredCourses = courses.filter(course => course.featured);

  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      
      <main className="flex-1">
        <Hero />

        {/* Cursos em Destaque */}
        <section className="py-16 bg-secondary/30">
          <div className="container mx-auto px-4">
            <div className="text-center mb-12">
              <h2 className="text-3xl md:text-4xl font-bold mb-4">
                Cursos em Destaque
              </h2>
              <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
                Confira nossa seleção especial de cursos mais procurados e bem avaliados
              </p>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
              {featuredCourses.map((course) => (
                <CourseCard key={course.id} course={course} />
              ))}
            </div>

            <div className="text-center">
              <Link to="/cursos">
                <Button size="lg" variant="outline" className="font-semibold">
                  Ver Todos os 117 Cursos
                </Button>
              </Link>
            </div>
          </div>
        </section>

        {/* Prova Social */}
        <section className="py-16">
          <div className="container mx-auto px-4">
            <div className="text-center mb-12">
              <h2 className="text-3xl md:text-4xl font-bold mb-4">
                Por Que Escolher a CursoPro?
              </h2>
              <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
                Milhares de alunos já transformaram suas carreiras conosco
              </p>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
              <div className="text-center p-6 rounded-lg bg-card shadow-[var(--shadow-card)]">
                <div className="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 text-primary mb-4">
                  <Star className="h-8 w-8" />
                </div>
                <h3 className="text-xl font-semibold mb-2">Qualidade Garantida</h3>
                <p className="text-muted-foreground">
                  Cursos desenvolvidos por especialistas reconhecidos no mercado
                </p>
              </div>

              <div className="text-center p-6 rounded-lg bg-card shadow-[var(--shadow-card)]">
                <div className="inline-flex items-center justify-center w-16 h-16 rounded-full bg-accent/10 text-accent mb-4">
                  <Users className="h-8 w-8" />
                </div>
                <h3 className="text-xl font-semibold mb-2">Comunidade Ativa</h3>
                <p className="text-muted-foreground">
                  Mais de 5.000 alunos aprendendo e crescendo juntos
                </p>
              </div>

              <div className="text-center p-6 rounded-lg bg-card shadow-[var(--shadow-card)]">
                <div className="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 text-primary mb-4">
                  <Award className="h-8 w-8" />
                </div>
                <h3 className="text-xl font-semibold mb-2">Certificados</h3>
                <p className="text-muted-foreground">
                  Certificado de conclusão reconhecido em cada curso
                </p>
              </div>

              <div className="text-center p-6 rounded-lg bg-card shadow-[var(--shadow-card)]">
                <div className="inline-flex items-center justify-center w-16 h-16 rounded-full bg-accent/10 text-accent mb-4">
                  <TrendingUp className="h-8 w-8" />
                </div>
                <h3 className="text-xl font-semibold mb-2">Aprenda no Seu Ritmo</h3>
                <p className="text-muted-foreground">
                  Acesso vitalício e suporte completo em todos os cursos
                </p>
              </div>
            </div>
          </div>
        </section>

        {/* Depoimentos */}
        <section className="py-16 bg-secondary/30">
          <div className="container mx-auto px-4">
            <div className="text-center mb-12">
              <h2 className="text-3xl md:text-4xl font-bold mb-4">
                O Que Nossos Alunos Dizem
              </h2>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
              <div className="bg-card p-6 rounded-lg shadow-[var(--shadow-card)]">
                <div className="flex mb-4">
                  {[...Array(5)].map((_, i) => (
                    <Star key={i} className="h-5 w-5 fill-accent text-accent" />
                  ))}
                </div>
                <p className="text-muted-foreground mb-4">
                  "Os cursos da CursoPro mudaram minha vida profissional. Consegui uma promoção 
                  depois de aplicar o que aprendi!"
                </p>
                <div className="flex items-center gap-3 mt-4">
                  <img 
                    src={testimonialMaria} 
                    alt="Maria Silva" 
                    className="w-12 h-12 rounded-full object-cover border-2 border-primary/20"
                  />
                  <div>
                    <div className="font-semibold">Maria Silva</div>
                    <div className="text-sm text-muted-foreground">Marketing Digital</div>
                  </div>
                </div>
              </div>

              <div className="bg-card p-6 rounded-lg shadow-[var(--shadow-card)]">
                <div className="flex mb-4">
                  {[...Array(5)].map((_, i) => (
                    <Star key={i} className="h-5 w-5 fill-accent text-accent" />
                  ))}
                </div>
                <p className="text-muted-foreground mb-4">
                  "Conteúdo de altíssima qualidade e professores excelentes. 
                  Recomendo para todos que querem crescer profissionalmente."
                </p>
                <div className="flex items-center gap-3 mt-4">
                  <img 
                    src={testimonialJoao} 
                    alt="João Santos" 
                    className="w-12 h-12 rounded-full object-cover border-2 border-primary/20"
                  />
                  <div>
                    <div className="font-semibold">João Santos</div>
                    <div className="text-sm text-muted-foreground">Desenvolvimento Web</div>
                  </div>
                </div>
              </div>

              <div className="bg-card p-6 rounded-lg shadow-[var(--shadow-card)]">
                <div className="flex mb-4">
                  {[...Array(5)].map((_, i) => (
                    <Star key={i} className="h-5 w-5 fill-accent text-accent" />
                  ))}
                </div>
                <p className="text-muted-foreground mb-4">
                  "Investimento que vale muito a pena! Os certificados ajudaram 
                  muito no meu currículo."
                </p>
                <div className="flex items-center gap-3 mt-4">
                  <img 
                    src={testimonialAna} 
                    alt="Ana Costa" 
                    className="w-12 h-12 rounded-full object-cover border-2 border-primary/20"
                  />
                  <div>
                    <div className="font-semibold">Ana Costa</div>
                    <div className="text-sm text-muted-foreground">Design Gráfico</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>

      <Footer />
    </div>
  );
};

export default Home;
