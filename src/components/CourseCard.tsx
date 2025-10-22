import { Link } from "react-router-dom";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardFooter, CardHeader, CardTitle } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Course } from "@/data/courses";

interface CourseCardProps {
  course: Course;
}

const CourseCard = ({ course }: CourseCardProps) => {
  return (
    <Card className="h-full flex flex-col overflow-hidden transition-all duration-300 hover:shadow-[var(--shadow-card-hover)] group">
      <div className="relative overflow-hidden aspect-video">
        <img
          src={course.image}
          alt={course.title}
          className="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
        />
        <Badge className="absolute top-3 right-3 bg-accent text-white">
          {course.category}
        </Badge>
      </div>
      <CardHeader className="flex-1">
        <CardTitle className="line-clamp-2 text-lg">{course.title}</CardTitle>
        <CardDescription className="line-clamp-2">{course.description}</CardDescription>
      </CardHeader>
      <CardContent>
        <div className="flex items-center justify-between">
          <span className="text-2xl font-bold text-primary">
            R$ {course.price.toFixed(2)}
          </span>
        </div>
      </CardContent>
      <CardFooter className="flex gap-2">
        <Link to={`/curso/${course.id}`} className="flex-1">
          <Button variant="outline" className="w-full">
            Ver Detalhes
          </Button>
        </Link>
        <a href={course.hotmartLink} target="_blank" rel="noopener noreferrer" className="flex-1">
          <Button className="w-full bg-accent hover:bg-accent/90 text-white font-semibold">
            Comprar Agora
          </Button>
        </a>
      </CardFooter>
    </Card>
  );
};

export default CourseCard;
