export interface IAsigEmpresa{
    id?: number,
    empresa_id: number,
    estudiante_id: number,
    tutor_general_id:number,
    tutor_academico_id:number,
    tutor_especifico_id:number,
    estado: string,
    created_at?: string,
    updated_at?: string
}