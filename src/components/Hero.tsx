import { Link } from "react-router-dom";
import { Button } from "@/components/ui/button";
import heroBackground from "@/assets/hero-background.jpg";

const Hero = () => {
  return (
    <section className="relative overflow-hidden">
      <div 
        className="absolute inset-0 z-0"
        style={{
          backgroundImage: `url(${heroBackground})`,
          backgroundSize: 'cover',
          backgroundPosition: 'center',
        }}
      />
      <div className="absolute inset-0 z-0 bg-primary/70" />
      
      <div className="container mx-auto px-4 py-20 md:py-32 relative z-10">
        <div className="max-w-3xl">
          <h1 className="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
            CHEGA DE ANSIEDADE. A HORA DE CONQUISTAR A VIDA QUE VOCÊ MERECE É{" "}
            <span className="text-accent">AGORA.</span>
          </h1>
          <p className="text-lg md:text-xl text-white/90 mb-4 leading-relaxed">
            Estes 117 cursos são o atalho validado para transformar seu futuro financeiro e pessoal em tempo recorde. Não perca mais um dia estagnado.
          </p>
          <p className="text-xl md:text-2xl font-bold text-white mb-6">
            Cada curso por <span className="text-accent text-2xl md:text-3xl">APENAS R$ 19,90!</span>
          </p>
          <p className="text-sm md:text-base text-accent font-semibold mb-4 animate-pulse">
            Últimas vagas em destaque - Comece a colher os resultados hoje!
          </p>
          <div className="flex flex-col sm:flex-row gap-4">
            <Link to="/cursos">
              <Button size="lg" className="bg-accent hover:bg-accent/90 text-white font-semibold text-lg px-8 py-6 shadow-lg">
                Explorar Todos os Cursos
              </Button>
            </Link>
            <Link to="/cursos">
              <Button 
                size="lg" 
                variant="outline" 
                className="bg-white/10 border-white/30 text-white hover:bg-white/20 backdrop-blur-sm font-semibold text-lg px-8 py-6"
              >
                Ver Destaques
              </Button>
            </Link>
          </div>
          
          <div className="mt-12 flex flex-wrap gap-8 text-white/90">
            <div>
              <div className="text-3xl font-bold text-white">117+</div>
              <div className="text-sm">Cursos Disponíveis</div>
            </div>
            <div>
              <div className="text-3xl font-bold text-white">10+</div>
              <div className="text-sm">Categorias</div>
            </div>
            <div>
              <div className="text-3xl font-bold text-white">5.000+</div>
              <div className="text-sm">Alunos Satisfeitos</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
