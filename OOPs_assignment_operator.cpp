#include <bits/stdc++.h>
using namespace std;
class vehicle
{
protected:
    int price;
    char* manufacturer;

public:
    vehicle()
    {
        price = 0;
        manufacturer=new char[15];
        manufacturer[0] = '\0';
        cout<<"Default Constructor called for base class"<<endl;
    }
    vehicle(int i, const char *x)
    {
        price = i;
        manufacturer = new char[strlen(x) + 1];
        strcpy(manufacturer, x);
        cout<<"Parametrized Constructor called for base class"<<endl;
    }
    vehicle(const vehicle &obj)
    {
        this->price = obj.price;
        this->manufacturer = new char[strlen(obj.manufacturer) + 1];
        strcpy(manufacturer, obj.manufacturer);
    }
    vehicle &operator=(const vehicle &rhs)
    {
        manufacturer = new char[strlen(rhs.manufacturer) + 1];
        strcpy(manufacturer, rhs.manufacturer);
        return *this;
    }
    void Read()
    {
        cout << "Enter the Price of the Vehicle : " << endl;
        cin >> price;
        getchar();
        cout << "Enter the Name of Manufacturer of the Vehicle : " << endl;
        scanf("%[^\n]s", manufacturer);
        getchar();
    }
    void display()
    {
        cout << "Price of the Vehicle is : " << price << endl;
        cout << "Name of the Manufacturer is : " << manufacturer << endl;
    }
    ~vehicle()
    {
         cout<<"Destructor called for base class"<<endl;
    }
};
class car : public vehicle
{
private:
    char *color;
    int seats;
    char *model;

public:
    car():vehicle()
    {
        color=new char[15];
        color[0] = '\0';
        seats = 0;
        model=new char[15];
        model[0] = '\0';
        cout<<"Default Constructor called for derived class"<<endl;
    }
    car(int a,const char *b,const char *y, int i,const char *x):vehicle(a,b)
    {
        color = new char[strlen(y) + 1];
        strcpy(color, y);
        seats = i;
        model = new char[strlen(x) + 1];
        strcpy(model, x);
        cout<<"Parametrized Constructor called for derived class"<<endl;
    }
    car(const car &obj):vehicle(obj)
    {
        this->color = new char[strlen(obj.color) + 1];
        strcpy(color, obj.color);
        this->seats = obj.seats;
        this->model = new char[strlen(obj.model) + 1];
        strcpy(model, obj.model);
    }
    car &operator=(const car &rhs)
    {
        vehicle(rhs.price, rhs.manufacturer);
        color = new char[strlen(rhs.color) + 1];
        strcpy(color, rhs.color);
        this->seats = rhs.seats;
        model = new char[strlen(rhs.model) + 1];
        strcpy(color, rhs.model);
        return *this;
    }
    void Read()
    {
        vehicle::Read();
        cout << "Tell the Color of the Car : " << endl;
        scanf("%[^\n]s", color);
        getchar();
        cout << "Tell the Number of Seats of the Car : " << endl;
        cin >> seats;
        getchar();
        cout << "Enter the Name of Model of the Car : " << endl;
        scanf("%[^\n]s", model);
        getchar();
    }
    void display()
    {
        vehicle::display();
        cout << "Color of the Car is : " << color << endl;
        cout << "Number of Seats of the Car is : " << seats << endl;
        cout << "Name of Model of the Car is : " << model << endl;
    }
    ~car()
    {
        cout<<"Destructor called for derived class"<<endl;
    }
};
int main()
{
    car ferrari(10000000,"ferrari","red",1,"sf21");
    car obj1(ferrari);
    obj1.display();
    cout<<"\n\n";
    car obj2(850000,"Hyundai","black",4,"verna");
    car mine=obj2;
	mine.display();
}
