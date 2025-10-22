import { Link, useLocation } from "react-router-dom";
import { Button } from "@/components/ui/button";
import { GraduationCap, Menu, X } from "lucide-react";
import { useState } from "react";

const Header = () => {
  const location = useLocation();
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);

  const isActive = (path: string) => location.pathname === path;

  return (
    <header className="sticky top-0 z-50 w-full border-b bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
      <div className="container mx-auto px-4">
        <div className="flex h-16 items-center justify-between">
          <Link to="/" className="flex items-center gap-2 font-bold text-xl">
            <GraduationCap className="h-8 w-8 text-primary" />
            <span className="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">
              CursoPro
            </span>
          </Link>

          {/* Desktop Navigation */}
          <nav className="hidden md:flex items-center gap-6">
            <Link
              to="/"
              className={`text-sm font-medium transition-colors hover:text-primary ${
                isActive("/") ? "text-primary" : "text-foreground/80"
              }`}
            >
              Página Inicial
            </Link>
            <Link
              to="/cursos"
              className={`text-sm font-medium transition-colors hover:text-primary ${
                isActive("/cursos") ? "text-primary" : "text-foreground/80"
              }`}
            >
              Cursos
            </Link>
            <Link
              to="/contato"
              className={`text-sm font-medium transition-colors hover:text-primary ${
                isActive("/contato") ? "text-primary" : "text-foreground/80"
              }`}
            >
              Contato
            </Link>
            <Link to="/cursos">
              <Button className="bg-accent hover:bg-accent/90 text-white font-semibold">
                Ver Todos os Cursos
              </Button>
            </Link>
          </nav>

          {/* Mobile Menu Button */}
          <button
            className="md:hidden p-2"
            onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
          >
            {mobileMenuOpen ? (
              <X className="h-6 w-6" />
            ) : (
              <Menu className="h-6 w-6" />
            )}
          </button>
        </div>

        {/* Mobile Navigation */}
        {mobileMenuOpen && (
          <nav className="md:hidden py-4 border-t">
            <div className="flex flex-col gap-4">
              <Link
                to="/"
                className={`text-sm font-medium transition-colors hover:text-primary ${
                  isActive("/") ? "text-primary" : "text-foreground/80"
                }`}
                onClick={() => setMobileMenuOpen(false)}
              >
                Página Inicial
              </Link>
              <Link
                to="/cursos"
                className={`text-sm font-medium transition-colors hover:text-primary ${
                  isActive("/cursos") ? "text-primary" : "text-foreground/80"
                }`}
                onClick={() => setMobileMenuOpen(false)}
              >
                Cursos
              </Link>
              <Link
                to="/contato"
                className={`text-sm font-medium transition-colors hover:text-primary ${
                  isActive("/contato") ? "text-primary" : "text-foreground/80"
                }`}
                onClick={() => setMobileMenuOpen(false)}
              >
                Contato
              </Link>
              <Link to="/cursos" onClick={() => setMobileMenuOpen(false)}>
                <Button className="w-full bg-accent hover:bg-accent/90 text-white font-semibold">
                  Ver Todos os Cursos
                </Button>
              </Link>
            </div>
          </nav>
        )}
      </div>
    </header>
  );
};

export default Header;
